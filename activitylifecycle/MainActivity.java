package com.example.lifecycle;

import android.os.Bundle;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        Toast.makeText(this, "Create", Toast.LENGTH_LONG).show();
    }
        protected void onStart(){ super.onStart();
            Toast.makeText(this, "start", Toast.LENGTH_LONG).show();
        }
        protected void onPause(){
            super.onPause();
            Toast.makeText(this, "pause", Toast.LENGTH_SHORT).show();
        }
        protected void onResume(){ super.onResume();
            Toast.makeText(this, "Resume", Toast.LENGTH_SHORT).show();
        }
        protected void onRestart(){
            super.onRestart();
            Toast.makeText(this, "Restart", Toast.LENGTH_SHORT).show();
    }
    protected void onStop(){
        super.onStop();
        Toast.makeText(this, "Stop", Toast.LENGTH_SHORT).show();
    }

        }