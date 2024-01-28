d1={1:4,2:5,3:8}
print("First dictionary:",d1)
d2={1:6,2:8,4:9}
print("Second dictionary:",d2)
d3=d1.copy()
d3.update(d2)
print("Merged dictionary:",d3)
