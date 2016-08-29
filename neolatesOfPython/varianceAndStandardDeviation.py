'''

'''
'''
median is a center object of a sorted list or a mean of two center objects of a sorted list
'''
def computeMedian(theList):
    isEven = True
    if (len(theList) % 2) is 1:
        print 'length is odd'
        isEven = False
    else:
        print 'length is even'

    theList = sorted(theList)
    middleIndex = len(theList)/2
    if isEven is True:
        print 'theList[middleIndex] is: ',
        print theList[middleIndex]
        print 'theList[middleIndex+1] is: ',
        print theList[middleIndex+1]
        return (theList[middleIndex] + theList[middleIndex+1])/float(2)
    else:
        return (theList[middleIndex])

'''
mean is a summation of all the objects of a list divided by the object count of the list
'''
def computeMean(theList):
    return sum(theList)/len(theList)
def computeSquaredDifference(mean, theList):
    return [((x-mean)*(x-mean)) for x in theList]


'''
variance is a mean of squared differences from the mean of a list
'''
def computeVariance(theList):
    print 'input list is: ',
    print theList
    mean = computeMean(theList)
    print "mean is:",
    print mean
    squaredDifference = computeSquaredDifference(mean, theList)
    print "squaredDifference is:",
    print squaredDifference
    variance = computeMean(squaredDifference)
    print 'variance is:',
    print variance
    return variance
'''
standard deviation is square root of standard variance
'''
def computeStandardDeviation(theList):
    variance = computeVariance(theList)
    import math
    standardDeviation = math.sqrt(variance)
    print 'standard deviation is:',
    print standardDeviation

#print computeMedian([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 17, 30])
computeStandardDeviation([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 17, 30])