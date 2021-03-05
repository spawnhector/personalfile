a=[]
while 1:
    inp=int(input('enter and press -1 when finish'))
    a.append(inp)
    print(a)

    check=-1 in a 
    if check==True:
        a.pop()
        max=0
        less=0
        for i in a:
            if i > max :
             max=i
        less=max
        for i in a:
            if i<max:
                less=i
        print(less)