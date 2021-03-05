def joinwrd():
    wrd=int(input('enter amount of words: '))
    a=[]
    c=''
    for i in range(wrd):
        b=input("enter word: ")
        a.append(b)
    for i in a:
        if i != ', ':
            c=c+i
    print(c)
