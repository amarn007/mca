class time:
 def __init__(self,hour,minute,second):
 self.__hour=hour
 self.__minute=minute
 self.__second=second
 
 def __add__(self,tm):
 print("Hour",self.__hour+tm.__hour)
 print("Minute",self.__minute+tm.__minute)
 print("Second",self.__second+tm.__second) 
 
hr=int(input("Enter the hour"))
mins=int(input("Enter the min"))
sec=int(input("Enter the seco"))
obj=time(hr,mins,sec)
 
hr1=int(input("Enter the hour"))
mins1=int(input("Enter the min"))
sec1=int(input("Enter the seco"))
obj1=time(hr1,mins1,sec1)
obj+obj1

