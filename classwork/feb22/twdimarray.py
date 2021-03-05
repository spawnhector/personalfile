number=[
#    0 1 2
    [1,2,3,],
    [4,5,6,],
    
]
a=number[1][1]+number[1][2]
print()
row=0
column=0
for i in number[row]:
    add=number[row][column]+number[row+1][column]
    column=column+1
    print(add)


    