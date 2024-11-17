package com.example.sharedpreference;

import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    EditText name;
    EditText email;
    EditText pass;
    RadioGroup gender;
    RadioButton r_female;
    CheckBox agree;
    Button bn;
    Boolean isALLFieldsChecked;
    SharedPreferences sp;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        sp=getSharedPreferences("login",MODE_PRIVATE);
        name=findViewById(R.id.name);
        email=findViewById(R.id.email);
        pass=findViewById(R.id.pass);
        gender=findViewById(R.id.gender);
        agree=findViewById(R.id.iagree);
        bn=findViewById(R.id.button);
    }
    public void onClickSubmit(View view) {
        isALLFieldsChecked = checkALLFields();
        if (isALLFieldsChecked) {
            SharedPreferences.Editor ed=sp.edit();
            ed.putString("name",name.getText().toString());
            ed.putString("email",email.getText().toString());
            // Correct gender selection based on RadioButton IDs
            if (gender.getCheckedRadioButtonId() == R.id.male) {
                ed.putString("gender", "male");
            } else if (gender.getCheckedRadioButtonId() == R.id.female) {
                ed.putString("gender", "female");
            }

            ed.commit();
            Toast.makeText(this,"SUCCESSFULLY", Toast.LENGTH_SHORT).show();
            Intent i=new Intent(MainActivity.this, MainActivity2.class);
            startActivity(i);
        }
    }
    private boolean checkALLFields() {
        if (name.length() == 0) {
            name.setError("name is required");
            return false;
        }
        if (email.length() == 0) {
            email.setError("email is required");
            return false;
        } else {
            String email1=email.getText().toString();
            String checkEmail ="[a-zA-Z0-9._-]+@+[a-z]+.+[a-z]";
            if (!email1.matches(checkEmail)) {
                email.setError("invalid error");
                return false;
            }
        }
        if (pass.length() == 8) {
            pass.setError("name is required");
            return false;
        }
        if (gender.getCheckedRadioButtonId() == -1) {
            Toast.makeText(this, "Please select a gender", Toast.LENGTH_SHORT).show();
            return false;
        }
        if (!agree.isChecked()) {
            agree.setError("please agree");
            agree.requestFocus();
            return false;
        }
        return true;
    }
}