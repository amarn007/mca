import operator
d={5:22,7:4,3:5}
print("Old Dictionary:\n",d)
print("\nSorted dictionary by value in ascending order:")
print(sorted(d.items(),key=operator.itemgetter(1)))
print("\nSorted dictionary by value in descending order:")
rev=dict(sorted(d.items(),key=operator.itemgetter(1),reverse=True))
print(rev)

