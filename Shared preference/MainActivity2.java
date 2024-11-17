package com.example.sharedpreference;

import androidx.appcompat.app.AppCompatActivity;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity2 extends AppCompatActivity {
    TextView displayName, displayEmail,displayGender;
    SharedPreferences sp;
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        sp=getSharedPreferences("login",MODE_PRIVATE);
        Toast.makeText(this,"login successfully completed", Toast.LENGTH_SHORT).show();
        displayName=findViewById(R.id.displayName);
        displayEmail=findViewById(R.id.displayEmail);
        displayGender=findViewById(R.id.displayGender);
        String name=sp.getString("name","Name");
        String email=sp.getString("email","example@gmail.com");
        String gender=sp.getString("gender","Male");
        displayName.setText("Name:"+name);
        displayEmail.setText("Email:"+email);
        displayGender.setText("Gender:"+gender);
    }

}