x= int(input("Enter 1st number: ")) 
y= int(input("Enter 2nd number: ")) 
i = 1
while(i<= x and i<= y):
if(x % i == 0 and y% i == 0): 
gcd = i
i = i + 1 
print("GCD :", gcd)

