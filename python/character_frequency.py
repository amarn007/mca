test_str=str(input("Enter the string : "))
freq = {}
for i in test_str:
ifi in freq:
freq[i] += 1
else:
freq[i] = 1
print ("Count of all characters : "+ str(freq))
OUTPUT
Enter the string :malayalam
Count of all characters : {'m': 2, 'a': 4, 'l': 2, 'y': 1}
