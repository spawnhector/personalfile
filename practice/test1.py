print()
scr="## The purpose of this script is to calculate the highest and the lowest of numbers you enter in a group ## "
print(scr)
a=[]
max=0
# to ask what type of task to perform.........
ask="(-2)highest number / (-3)lowest number / (-4)arrange from highest to lowest / (-5)arrange from lowest to highest/ "
ask1="(-6)sum of all number: "
# ............................................
en=-1
count=0
# program starts here
while 1:
    # to take input and assign to the list
    print()
    print(a)
    num=int(input('Enter Numbers To Group:'))
    a.append(num)
    # choice question
    print("Press '-1' when finish OR '-7' to delete")
    print()
    # to check if 'delete' input is entered
    check7=-7 in a
    # to delete if entered
    if check7==True:
        a.pop()
        a.pop()
    # to check if 'finish' input is entered
    check3=-1 in a 
    # if finish start and delete finish input
    if check3==True:
        a.pop()
        # to do calculation if finish is entered and print the list
        while check3==True:
            print()
            print(a)
            # to ask what type of task to perform
            print('What do you want?')
            print(ask)
            quest1=int(input(ask1))
            a.append(quest1)
            print()
            # to check if input is entered
            check1=-2 in a
            check2=-3 in a
            check5=-5 in a
            check4=-4 in a
            check6=-6 in a
            # to clear input after recieve
            if check1==True:
                a.pop()
            if check2==True:
                a.pop()
            if check5==True:
                a.pop()
            if check4==True:
                a.pop()
            if check6==True:
                a.pop()
            # to do calculation
            for n in a:
                if n>max:
                    max=n
            less=max
            for n in a:
                if n<less:
                    less=n
            # to give answers
            if check1==True:
                print('The highest number you entered is',max)
            if check2==True:
                print('The lowest number you entered is',less)
            if check4==True:
                a.sort(reverse=True)
                print('The numbers you entered from highest to lowest is',a)
            if check5==True:
                a.sort()
                print('The numbers you entered from lowest to highest is',a)
            if check6==True:
                print(a)
                c2=0
                for c in a:
                    c2=c2+c
                print()
                print("The total of the numbers you entered is: ",c2)

                
            
            
