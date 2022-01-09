from selenium import webdriver

driver=webdriver.Chrome("C:\Program Files (x86)\chromedriver.exe")
driver.get("https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_checkbox")

search=driver.find_element_by_id("vehicle1")
search.click()