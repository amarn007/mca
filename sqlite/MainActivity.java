package com.example.sqlite;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    EditText ename,eplace,eid;
    Button bsubmit,bsel,bup,bdel,bclr;
    TextView tid,tname,tplace;
    SQLiteDatabase db;
    AlertDialog.Builder builder;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        ename	=(EditText) findViewById(R.id.ET_name);
        eplace	=(EditText) findViewById(R.id.ET_place);
        eid	=(EditText)findViewById(R.id.ET_id);
        bsubmit	=(Button) findViewById(R.id.B_SUBMIT);
        bsel	=(Button) findViewById(R.id.B_sel);
        tid	=(TextView) findViewById(R.id.T_id);
        tname	=(TextView) findViewById(R.id.T_name);
        tplace	=(TextView) findViewById(R.id.T_place);
        bup	=(Button) findViewById(R.id.B_update);
        bdel	=(Button)findViewById(R.id.B_delete);
        bclr	=(Button)findViewById(R.id.B_clear);
        builder	= new AlertDialog.Builder(this);

        try{
            db = openOrCreateDatabase("empdb", MODE_PRIVATE, null);
            db.execSQL("Create table employee(id integer primary key,name Text,place Text)");
            Toast.makeText(getApplicationContext(), "Created Successfully", Toast.LENGTH_SHORT).show();
        }
        catch(Exception e)
        {
        }

        bsubmit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                try {
                    db.execSQL("Insert into employee values ("+eid.getText().toString()+",'"+ename.getText().toString()+"','"+eplace.getText().toString()+"')");
                    Toast.makeText(getApplicationContext(), "Record Inserted Successfully", Toast.LENGTH_SHORT).show();
                }
                catch (Exception e) {
                    Toast.makeText(getApplicationContext(), "Error in Data", Toast.LENGTH_SHORT).show();
                }
            }
        });
        bclr.callOnClick();

        bsel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Cursor c = db.rawQuery("select * from employee ", null);
                if (c.getCount() == 0) {
                    Toast.makeText(getApplicationContext(), "No such record", Toast.LENGTH_SHORT).show();
                } else {
            /*    c.moveToFirst();
                tid.setText(c.getString(0));
                tname.setText(c.getString(1));
                tplace.setText(c.getString(2));
            }*/

                    StringBuffer b = new StringBuffer();
                    while (c.moveToNext()) {
                        b.append("Id:" + c.getString(0) + "\n");
                        b.append("Name:" + c.getString(1) + "\n");
                        b.append("Place:" + c.getString(2) + "\n");
                        // on below line we are creating a new array list.
                    }
                    Toast.makeText(getApplicationContext(), b.toString(), Toast.LENGTH_LONG).show();
                    builder.setMessage(b.toString());
                    AlertDialog alert = builder.create();
                    alert.setTitle("Employee Data");
                    alert.show();
                }
            }
        });
        bup.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                db.execSQL("update employee set name='"+ename.getText().toString()+"',place='"+eplace.getText().toString()+"' where id="+eid.getText().toString()+"");
                Toast.makeText(getApplicationContext(), "updated....", Toast.LENGTH_SHORT).show();
            }
        });
        bdel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                db.execSQL("delete from employee where id="+eid.getText().toString());
                Toast.makeText(getApplicationContext(), "Item Deleted", Toast.LENGTH_SHORT).show();

            }
        });

        bclr.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                eid.setText("");
                ename.setText("");
                eplace.setText("");

            }
        });
        bclr.callOnClick();
    }
}
