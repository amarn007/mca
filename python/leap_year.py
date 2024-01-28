a=int(input("enter the starting year"))
b=int(input("enter tne last year"))
if(a<b):
print("leap year is",end="")
fori in range(a,b):
if(i%4==0 and i%100!=0):
print(i,end="")
 print()
