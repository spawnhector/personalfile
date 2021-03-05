
from dontknw import *
from time import time
import pprint

pp = pprint.PrettyPrinter(indent=4)

blockchain = Blockchain()
transactions = []

block = Block(transactions, time(), 0)
blockchain.addBlock(block)


block = Block(transactions, time(), 1)
blockchain.addBlock(block)

block = Block(transactions, time(), 2)
blockchain.addBlock(block)

block = Block(transactions, time(), 3)
blockchain.addBlock(block)

block = Block(transactions, time(), 4)
blockchain.addBlock(block)

block = Block(transactions, time(), 5)
blockchain.addBlock(block)

for n in range(10):
    block.mineBlock(0)
    pp.pprint(blockchain.chainJSONencode())
    print("Length: ", len(blockchain.chain))
    




