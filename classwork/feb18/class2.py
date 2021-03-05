total=float(input('enter total'))
amount=int(input('Enter the amount of fruits'))
a=[]
b=[]
c=[]
count=0
for i in range(amount):
    a.append(input('Enter Fruits: '))
for i in range(amount):
    print('Enter the amount of')
    b.append(input(a[count] ))
    count=count+1
for i in range(amount):
    c.append(input('Enter price per kg'))
print(a)
print(b)
print(c)
# Calculation
dh=b[count] * c[count]
print(dh)



