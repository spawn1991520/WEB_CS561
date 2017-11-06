#coding=utf-8


from selenium import webdriver
import time
import MySQLdb

t_username = "test1"
t_firstname = "test1"
t_lastname = "test1"
t_email = "test1@1"
t_Password = "test1"
t_re_Password = "test1"

driver=webdriver.Chrome()  #use chrome

driver.get('http://www.corvallisused.com/registration.html') #open webpage


elem_user=driver.find_element_by_name('username')    

elem_user.clear()   

elem_user.send_keys(t_username)    

elem_pass=driver.find_element_by_name('firstname')   

elem_pass.clear()    

elem_pass.send_keys(t_firstname)  

elem_user=driver.find_element_by_name('lastname')    

elem_user.clear()   

elem_user.send_keys(t_lastname)   

elem_user=driver.find_element_by_name('re_email')    

elem_user.clear()   

elem_user.send_keys(t_email)   

elem_user=driver.find_element_by_name('Password')    

elem_user.clear()   

elem_user.send_keys(t_Password)   

elem_user=driver.find_element_by_name('re_Password')    

elem_user.clear()   

elem_user.send_keys(t_re_Password)   

elem_login=driver.find_element_by_id('register-submit')   

elem_login.click()    
'''
time.sleep(1)
elem_login=driver.find_element_by_id('unit_test')
elem_login.click()
'''
conn = MySQLdb.connect(host = "udm328989166.my3w.com", port = 3306, user = "udm328989166", passwd = "gaoxiaofei",db = "udm328989166_db" )
cur=conn.cursor()
vars = cur.execute("select firstname from Users where username = %s", t_username )
result=cur.fetchone()
result_0 = result[0]

if result[0] == t_firstname :
	print "success"
else:
	print "fall"
'''
cur.close()
conn.close()
print vars
'''
# driver.quit()

