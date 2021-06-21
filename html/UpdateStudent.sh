mysql -h test.cwieffceuygm.us-east-1.rds.amazonaws.com -u admin -D university -p --batch --quick -e "SELECT * FROM Student " | sed 's/\t/","/g;s/^/"/;s/$/"/;s/\n//g' > Stud.csv
