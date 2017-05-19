# Open the local file
import re

fo = open("allJSONPayloads.txt")
my_lines = fo.readlines()
fo.close()

for line in my_lines:
    # Use a regular expression to find the specific groups
    print
    mos = re.finditer(r"\"offset\":([\d.]+)", line)
    for m in mos:
        print m.group(0)