l = [2,4,8,5]

print(l)

l2 = list(filter(lambda x: x%2==0,l))

print(l2)

l3 = list(map(lambda y: y+2, l))

print(l3)