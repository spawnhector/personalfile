b=[]
c=[]
take=int(input('number of words'))
for i in range(take):
    data=str(input('Enter Words: '))
    b.append(data)
print(b)
for ce in range(take):
    coun=take
print(coun)

print('What do you want to do with these words? ')
print('(A)To ascend words / (B)To decend words')
action=str(input())
for h in action:
    press=action
    c.append(press)
check='A' in c
check1= 'B' in c
if check==True:
    b.sort()
    print ("The words you entered assended is", b)
if check1==True:
    b.sort(reverse=True)
    print('The words you entered decend is', b)