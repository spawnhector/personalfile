a=[]
name=input('what your name?')
print()
a.append(name)
print('hi',a[0])
mode=input('how is your day going?')
print()
a.append(mode)
if a[1]=='good':
    print('yes')
elif a[1]=='bad':
    print('no')
else:
    print('ERROR! Input not reconized')
    print('Try again by entering good/bad')
    while 1+1==2:
        print()
        mode=input('how is your day going?')
        a.append(mode)
        check1='good' in a
        check2='bad' in a
        if check1==True:
            print('ok lets move on')
            break
        elif check2==True:
            print('yes yes')
            break
        else:
            print('let try again')
