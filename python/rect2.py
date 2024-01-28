class rectangle:
 def __init__(self,l,b):
 self.__length=l
 self.__breadth=b
 def area(self):
 self.area=self.__length*self.__breadth
 print("Area=",self.area)
 def __lt__(self,second):
 if self.area < second.area:
 return True
 else:
 return False
print("first Rectangle:")
len1=int(input("Enter the length:"))
bread1=int(input("Enter the breadth:"))
obj1=rectangle(len1,bread1)
obj1.area()
print("\nSecond Rectangle:")
len2=int(input("Enter the length:"))
bread2=int(input("Enter the breadth:"))
obj2=rectangle(len2,bread2)
obj2.area()
if obj1 < obj2 :
print("\nArea of second rectangle is larger:")
else:
print("\nArea of first rectangle is larger:")
Dept. Of Computer Applications , SNGCE Page 50

