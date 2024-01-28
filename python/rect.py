class rectangle:
 def __init__(self,l,b):
 self.l=l
 self.b=b
 def area(self):
 area=self.l*self.b
 print("area of rectangle",area)
 return(area)
 def perimeter(self):
 per=2*(self.l+self.b)
 print("perimeter of rectangle",per)
 return(per)
r1=rectangle(7,8)
r2=rectangle(8,7)
a=r1.area()
r1.perimeter()
b=r2.area()
r2.perimeter()
if(a>b):
Dept. Of Computer Applications , SNGCE Page 45
 print("Rectangle one area is greater",a)
else:
 print("Rectangle two area is greater",b)

