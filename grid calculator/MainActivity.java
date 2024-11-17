package com.example.newcalculator;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    private TextView display;
    private StringBuilder input;
    private StringBuilder input1;
    private String operation;
    private double firstOperand;
    private boolean isResultDisplayed;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        display = findViewById(R.id.display);
        input = new StringBuilder();
        input1 = new StringBuilder();
        isResultDisplayed = false;
    }

    // Handling number button clicks
    public void onNumberClick(View view) {
        Button button = (Button) view;

        // If a result was displayed, reset the input for a new calculation
        if (isResultDisplayed) {
            input.setLength(0);
            input1.setLength(0);
            isResultDisplayed = false;
        }

        // Append the clicked number to both input and input1
        input.append(button.getText());
        input1.append(button.getText());

        // Update the display immediately after appending
        display.setText(input1.toString());


    }

    // Handling operation button clicks
    public void onOperationClick(View view) {
        if (input.length() > 0) {
            firstOperand = Double.parseDouble(input.toString());
            operation = ((Button) view).getText().toString();
            input.setLength(0); // Clear input for the next operand

            // Append the operation to input1 and update the display
            input1.append(operation);
            display.setText(input1.toString());
        }
    }

    // Handling equals button click
    public void onEqualClick(View view) {
        if (input.length() > 0 && operation != null) {
            double secondOperand = Double.parseDouble(input.toString());
            double result = 0;

            // Perform the operation
            switch (operation) {
                case "+":
                    result = firstOperand + secondOperand;
                    break;
                case "-":
                    result = firstOperand - secondOperand;
                    break;
                case "*":
                    result = firstOperand * secondOperand;
                    break;
                case "/":
                    if (secondOperand != 0) {
                        result = firstOperand / secondOperand;
                    } else {
                        display.setText("Error");
                        resetCalculator();
                        return;
                    }
                    break;
            }

            // Display the result and update input1 for further calculations
            display.setText(String.valueOf(result));
            input.setLength(0);
            input.append(result);
            input1.setLength(0);
            input1.append(result);
            isResultDisplayed = true;
            operation = null;
        }
    }

    // Handling clear button click
    public void onClearClick(View view) {
        resetCalculator();
        display.setText("");
    }

    // Resetting the calculator's state
    private void resetCalculator() {
        input.setLength(0);
        input1.setLength(0);
        operation = null;
        firstOperand = 0;
        isResultDisplayed = false;
    }
}
