#!/usr/bin/evn python
from xml.etree import ElementTree as ET

infile = 'rbac.xml'
xml = ET.parse(infile)


for role in xml.findall("./node/role"):
  print role.attrib
  for child in role.getchildren():
    print child.attrib
    for operation in child:
      print operation.attrib

