package com.example.intend;
import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    EditText e_name, e_email, e_pwd;
    RadioGroup gender;
    RadioButton e_female, e_male;
    CheckBox checkBox;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        e_name = findViewById(R.id.name);
        e_email = findViewById(R.id.email);
        e_pwd = findViewById(R.id.pass);
        gender = findViewById(R.id.gender);
        e_female = findViewById(R.id.female);
        e_male = findViewById(R.id.male);
        checkBox = findViewById(R.id.iagree);
    }

    public void onClickSubmit(View view) {
        boolean isAllFieldsChecked = checkedAllFields();
        if (isAllFieldsChecked) {
            Intent intent = new Intent(MainActivity.this, MainActivity2.class);
            intent.putExtra("name", e_name.getText().toString());
            intent.putExtra("email", e_email.getText().toString());
            intent.putExtra("gender", gender.getCheckedRadioButtonId() == R.id.male ?
                    "Male" : "Female");
            startActivity(intent);
        }
    }

    private boolean checkedAllFields() {
        if (e_name.length() == 0) {
            e_name.setError("Please Enter Your Name");
            return false;
        }

        if (e_email.length() == 0) {
            e_email.setError("Email required");
            return false;
        } else {
            String s_email = e_email.getText().toString();
            String checkEmailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$";
            if (!s_email.matches(checkEmailPattern)) {
                e_email.setError("Select a valid email");
                return false;
            }
        }

        if (e_pwd.length() < 8) {
            e_pwd.setError("Please enter a valid password");
            return false;
        }

        if (gender.getCheckedRadioButtonId() == -1) {
            e_female.setError("Please choose gender");
            Toast.makeText(this, "Select gender", Toast.LENGTH_SHORT).show();
            e_female.requestFocus();
            return false;
        }

        if (!checkBox.isChecked()) {
            checkBox.setError("Please agree!");
            Toast.makeText(this, "Please agree to the terms", Toast.LENGTH_SHORT).show();
            checkBox.requestFocus();
            return false;
        }

        return true;
    }
}
