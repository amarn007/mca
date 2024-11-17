package com.example.intend;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;
import android.widget.Toast;
public class MainActivity2 extends AppCompatActivity {
    TextView displayName, displayEmail, displayGender;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        Toast.makeText(this, "Login successfully Completed", Toast.LENGTH_SHORT).show();
        displayName = findViewById(R.id.displayName);
        displayEmail = findViewById(R.id.displayEmail);
        displayGender = findViewById(R.id.displayGender);
        String name = getIntent().getStringExtra("name");
        String email = getIntent().getStringExtra("email");
        String gender = getIntent().getStringExtra("gender");
        displayName.setText("Name: " + name);
        displayEmail.setText("Email: " + email);
        displayGender.setText("Gender: " + gender);
    }}