#!/usr/bin/env python
# coding: utf-8

# In[184]:


import pandas as pd


# In[185]:


from pathlib import Path


# In[186]:


import fuzzymatcher


# In[187]:


Prof = pd.read_csv (r'/var/www/html/Prof.csv')


# In[188]:


#print(Prof)


# In[189]:


Stud = pd.read_csv (r'/var/www/html/Stud.csv')


# In[190]:


#print(Stud)


# In[209]:


left_on = ["Department","Course"]

right_on = ["Stud_Department","Stud_Course"]


# In[210]:


matched_results = fuzzymatcher.fuzzy_left_join(Prof,
                                            Stud,
                                            left_on,
                                            right_on,
                                            left_id_col='Course',
                                            right_id_col='Stud_Course'
                                              )


# In[211]:


#matched_results


# In[223]:


cols = [  "First_Name_left","Last_Name_left", "SU_ID", "First_Name_right", "Last_Name_right",
    "Email_right", "Stud_Department", "GPA", "Stud_Course"]

matched = matched_results[cols].sort_values(by=["First_Name_left"], ascending=True).head(50)


# In[224]:


matched


# In[229]:


matched.columns=["Professor First Name","Professor Last Name", "SU ID", "Student First Name", "Student Last Name",
    "Student Email", "Student Department", "GPA", "Course"]


# In[230]:


matched.to_csv(r'/var/www/html/login/New.csv', index = False)

