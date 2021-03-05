import datetime
import hashlib
from time import time
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
    
    def chainJSONencode(self):
        blockArrJSON=[];
        for block in self.chain:
            blockJSON={};
            blockJSON['hash']=block.hash;
            blockJSON['index']=block.index;
            blockJSON['prev']=block.prev
            
        
class Block(object):
    def __init__(self,transactions,time,index):
        self.index = index;
        self.transactions = transactions;
        self.time = time;
        self.prev = '';
        

        #reordering self.hash and self.sender as self.get_sender() references to self.sender
       
        self.hash = self.calculateHash();

    
    def calculateHash(self):
        hashTransactions = ""; 
        for Transaction in self.transactions:
            hashTransactions += Transaction.hash; 
 
        hashString = str(self.time) + hashTransactions + self.previous_block_hash + str(self.index); 
        hashEncoded = json.dumps(hashString, sort_keys=True).encode(); 
        return hashlib.sha256(hashEncoded).hexdigest();
    
    def create_genesis_block():
        return Block('0', '0', datetime.datetime.now(), '')

    def get_hash(self):
        header_bin = str(self.previous_block_hash) + str(self.index) \
            + str(self.time) + str(self.transaction)

        inner_hash = \
            hashlib.sha256(header_bin.encode()).hexdigest().encode()
        outer_hash = hashlib.sha256(inner_hash).hexdigest()
        return outer_hash
    
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
    


