package com.example.login;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private EditText editTextUsername, editTextPassword;
    private Button buttonLogin;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Initialize views
        editTextUsername = findViewById(R.id.editTextText3); // Username input
        editTextPassword = findViewById(R.id.editTextTextPassword); // Password input
        buttonLogin = findViewById(R.id.button); // Login button

        // Set up click listener for the login button
        buttonLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                handleLogin();
            }
        });
    }
    private void handleLogin() {
        // Get the input from EditTexts
        String username = editTextUsername.getText().toString().trim();
        String password = editTextPassword.getText().toString().trim();

        // Check if username and password are entered
        if (username.isEmpty() || password.isEmpty()) {
            Toast.makeText(this, "Please enter both username and password", Toast.LENGTH_SHORT).show();
            return;
        }

        // For demo purposes, let's use hardcoded username and password validation
        if (username.equals("Amar") && password.equals("1234")) {
            Toast.makeText(this, "Login Successful!", Toast.LENGTH_SHORT).show();
            // Navigate to another activity or perform another action here
        } else {
            Toast.makeText(this, "Invalid Username or Password", Toast.LENGTH_SHORT).show();
        }
    }
}

