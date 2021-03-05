print()
print()
a=[]
print('(-1)Speed / (-2)Distance / (-3)Time')
quest1=int(input('What do you want to Calculate?'))
a.append(quest1)

# to check for guest1 result
check1=-1 in a
check2=-2 in a
check3=-3 in a

# Function to calculate speed 
def cal_speed(dist, time): 
    print(" Distance(km) :", dist); 
    print(" Time(hr) :", time); 
    return dist / time; 

# Function to calculate distance traveled 
def cal_dis(speed, time): 
    print(" Time(hr) :", time) ; 
    print(" Speed(km / hr) :", speed); 
    return speed * time; 

# Function to calculate time taken 
def cal_time(dist, speed): 
    print(" Distance(km) :", dist); 
    print(" Speed(km / hr) :", speed); 
    return speed * dist; 

# if quest1 results found
if check1==True:
    dist=float(input('Enter the distance taken: '))
    time=float(input('Enter the time taken: ')) 
    #cal_dis(cal_speed(dist,time),time)
    # Calling function cal_speed() 
    print(" The calculated Speed(km per hr) is :", 
                        cal_speed(dist,time)); 
if check2==True:
    time=float(input('Enter the time taken: '))
    speed=float(input('Enter the speed:  '))

    # Calling function cal_dis() 
    print(" The calculated Distance(km) :", 
                    cal_dis(speed,time)); 
    print(""); 
if check3==True:
    dist=float(input('Enter the distance taken: '))
    speed=float(input('Enter the speed'))
 
    # Calling function cal_time() 
    print(" The calculated Time(hr) :", 
                cal_time(dist,speed)); 
    print(''); 