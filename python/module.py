
circle module
def perimeter(r):
return(2*3.14*r)
def area(r):
return(3.14*r*r)
rectangle module
def perimeter(l,b):
return(2*(l+b))
def area(l,b):
return(l*b)

sphere module
def perimeter(r):
return(2*3.14*r)
def area(r):
return(4*3.14*r*r)

def perimeter(l,b,h):
return(4*(l+b+h))
def area(l,w,h):
return(2*l*w+2*l*h+2*h*w)

from graphics import rectangle
from graphics import circle
from dgraphics import cuboid
from dgraphics import sphere
print("Rectangle:")
l=int(input("Enter the length:"))
b=int(input("Enter the breadth:"))
print("Area=",rectangle.area(l,b))
print("Perimeter=",rectangle.perimeter(l,b))
print("\nCircle:")
r=int(input("Enter the radius:"))
print("Area=",circle.area(r))
print("Perimeter=",circle.perimeter(r))
print("\nCuboid:")
l=int(input("Enter the length:"))
w=int(input("Enter the width:"))
h=int(input("Enter the height:"))
b=int(input("Enter the breadth:"))
print("Area=",cuboid.area(l,w,h))
print("perimeter=",cuboid.perimeter(l,b,h))
print("\nSphere:")
r=int(input("Enter the radius:"))
print("Area=",sphere.area(r))
Dept. Of Computer Applications , SNGCE Page 43
print("perimeter=",sphere.perimeter(r))
