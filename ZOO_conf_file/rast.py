import sys
import zoo



def demoTest(conf,inputs,outputs):
      fileName="mypoints_"+conf["lenv"]["usid"]+".json"
      binary_file=open(conf["main"]["dataPath"]+"/"+fileName, "w")
      binary_file.write(inputs["query"]["value"])
      binary_file.close()
      outputs["Result"]["value"]=fileName
      return zoo.SERVICE_SUCCEEDED
