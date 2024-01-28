Generate positive list of numbers from a given list ofintegers

list=[10,-9,-25,66,3,7]
r=[n for n in list if n>=0]
print(r)
OUTPUT
[10, 66, 3, 7]


 n=int(input("enter the number"))
 square=[i**2 for i in range(1,n+1)]
 print("squreis",square)
OUTPUT
enter the number6
squre is [1, 4, 9, 16, 25, 36]


 n=input("enter the word")
 print("the strings are",n)
 print("the vowels are",end="")
 fori in n:
 ifi in 'aeiouAEIOU':
 print([i],end="")
 OUTPUT
enter the word javascript
the strings are javascript
the vowels are['a']['a']['i']
Dept. Of Computer Applications , SNGCE Page 5


 w=input("Enter a word:")
print("Ordinal values corresponding to each element is:")
fori in w:
print(i,end=":")
print(ord(i),end=" ")
