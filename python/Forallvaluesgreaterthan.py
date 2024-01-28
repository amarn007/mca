n=[]
s=int(input("Enter a limit:"))
print("Enter values")
fori in range(0,s): n.append(int(input()))
print("\nThe list after assinging:\n")
fori in range(0,len(n)):
if n[i]>=100:print("over") 
else:print(n[i])
