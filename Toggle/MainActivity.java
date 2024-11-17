package com.example.toggle;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;


public class MainActivity extends AppCompatActivity implements View.OnClickListener {
    private View image;
    private View image1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        image = findViewById(R.id.img);
        image1 = findViewById(R.id.img1);

        image.setOnClickListener(this);
        image1.setOnClickListener(this);

        // Initially set one image to VISIBLE and the other to GONE
        image1.setVisibility(View.GONE);
    }

    @Override
    public void onClick(View view) {
        if (view == image) {
            image.setVisibility(View.GONE);
            image1.setVisibility(View.VISIBLE);
        } else {
            image1.setVisibility(View.GONE);
            image.setVisibility(View.VISIBLE);
        }
    }
}
