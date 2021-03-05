a=[]
for i in input('enter word '):
    a.append(i)
b=input("enter letter to check for ")
check= b in a
if check == True:
    print(b," is in the entered words")
else:
    print(b," is not in the entered words")
