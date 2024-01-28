str1 = input("Enter a string : ")
wlist = str1.split()
count= []
fori in wlist:
count.append(wlist.count(i))
print("count of the occurrence:" + str(list(zip(wlist, count))))
OUTPUT
Enter a string : java is power full
count of the occurrence:[('java', 1), ('is', 1), ('power', 1), ('full', 1)]
