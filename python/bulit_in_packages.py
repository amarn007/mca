Time Module
import time
print("Current time in sec:",time.time())
print("Current time:",time.ctime())
print("Time After 30 sec:",time.ctime(time.time()+30))
t=time.localtime()
print("Time:",t)
print("Time-current year:",t.tm_year)
print("Time:-current month",t.tm_mon)
print("Time:-current day",t.tm_mday)
print("Time:-current hour",t.tm_hour)
print("Time:-current minute",t.tm_min)
print("Time:-current sec",t.tm_sec)
print("Time:-current week day",t.tm_wday)
print("Time:-current year day",t.tm_yday)

import math
print("The value of pi ",math.pi)
import math as m
print("The value of pi ",m.pi)
from math import pi,sqrt
print(math.pi)
print(math.sqrt(5))
print(math.tan(30))
print(math.cos(45))

import calendar
mm=int(input("Enter month:"))
yy=int(input("Enter year:"))
print("\n")
print(calendar.month(yy,mm))

import datetime
t=datetime.time(22,56,20,67)
print(t)
print("Hour",t.hour)
print("Minutes",t.minute)
print("Seconds",t.second)
print("Microsecond:",t.microsecond)
print("\n")
d=datetime.date.today()
print(d)
print("Year:",d.year)
print("Month:",d.month)
print("Day:",d.day)
d1=datetime.date.today()
print(d1)
td=datetime.timedelta(days=2)
print(td)
d2=d1+td
print(d2)
dt=datetime.datetime.combine(d1,t)
print(dt)

Statistics module
import statistics
print(statistics.mean([3,4,3]))
print(statistics.median([1, 3, 5, 7, 9, 11, 13]))
print(statistics.mode([1, 1, -3, 3, 7, -9]))
print(statistics.variance([1, 3, 5, 7, 9, 11]))
print(statistics.stdev([1, 3, 5, 7, 9, 11]))
OUTPUT
3.3333333333333335
7
1
14
3.7416573867739413
Random module
import random
random.seed(10)
print(random.random())
print(random.uniform(20, 60))
lst = ["orange", "apple", "graphes"]
print(random.sample(lst, k=2))
print(random.random())
lst2 = ["orange", "apple", "graphes"]
random.shuffle(lst2)
print(lst2)
lst3 = ["orange", "apple", "graphes"]
print(random.choice(lst3))
