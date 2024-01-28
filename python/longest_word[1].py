a=[]
n= int(input("Enter the number of elements in list:"))
for x in range(0,n):
element=input("Enter element "+ str(x+1))
a.append(element)
max1=len(a[0])
temp=a[0]
fori in a:
if(len(i)>max1):
 max1=len(i)
temp=i
print("Longest Word:",temp)
print("Length of longest word :",max1)
