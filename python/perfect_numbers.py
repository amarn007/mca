import math
n=int(input("Enter the limit:"))
print("Perfect numbers:\n")
for i in range(1000,n+1):
t=int(math.sqrt(i))
if t*t==i and i%2==0:
 print(i,end="")
