a=[]
count=0
for i in input('Enter Words '):
    a.append(i)
b=input("Enter letter to count: ")
for i in a:
    if i == b:
        count=count+1
print(count)


