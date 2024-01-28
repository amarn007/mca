n=int(input("Enter the limit:"))
for i in range(n+1):
for j in range(1,i+1):
 print("*",end="")
print("\n")
for i in range(n,0,-1):
for j in range(i):
 print("*",end="")
print("\n")
