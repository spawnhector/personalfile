from time import time
import json
import hashlib
import json

class Blockchain(object):
    def __init__(self):
        self.chain=[]; 

    def getLastBlock(self):
        return self.chain[-1]; 

    def addBlock(self,block):
        if (len(self.chain) > 0):
            block.prev = self.getLastBlock().hash; 
        else:
            block.prev = "none"; 
        self.chain.append(block); 

class Block(object):
    def __init__(self,transactions,time,index):
        self.index = index; 
        self.transactions = transactions; 
        self.time = time; 
        self.prev = ''; 
        self.hash = self.calculateHash(); 

    def calculateHash(self):
        hashTransactions = ""; 
        for Transaction in self.transactions:
            hashTransactions += Transaction.hash; 
 
        hashString = str(self.time) + hashTransactions + self.prev + str(self.index); 
        hashEncoded = json.dumps(hashString, sort_keys=True).encode(); 
        return hashlib.sha256(hashEncoded).hexdigest(); 

class Transaction(object):
    def __init__(self,sender,reciever,amt):
        self.sender = sender; 
        self.reciever = reciever; 
        self.amt = amt; 
        self.time = time(); 
        self.hash = self.calculateHash(); 

    def calculateHash(self):
        hashString = self.sender + self.reciever + str(self.amt) + str(self.time)
        hashEncoded = json.dumps(hashString, sort_keys=True).encode(); 
        return hashlib.sha256(hashEncoded).hexdigest(); 
    
