#download the 

import re
import requests

def getHtml(url):
    try:
        res = requests.get(url)
        res.raise_for_status()
        res.encoding = res.apparent_encoding
        return res.text
    except Exception as e:
        raise e

def getPicUrl(html,pattern):
    prog = re.compile(pattern)
    match = prog.search(html)
    if match:
        m = match.group(0)
        progOfUrl = re.compile(r'/.*?\.jpg')
        url = progOfUrl.search(m)
        if(url):
            return url.group(0)
    else:
        return None


def savePic(picRootDir,url):
    try:
        res = requests.get(url)
        res.raise_for_status()
        picName = url.split('/')[-1]
        con = res.content
    except Exception as e:
        raise e

    f = open(picRootDir+picName,'bw')
    f.write(con)
    f.close()
    print('pic saved')
 

def main():
    url = 'http://cn.bing.com'
    pat = r'g_img=\{url\:.*?jpg'
    picRootDir = './'
    
    html = getHtml(url)
    # html = bing
    picUrl = url + getPicUrl(html,pat)

    # print(picUrl)
    savePic(picRootDir,picUrl)

main()


