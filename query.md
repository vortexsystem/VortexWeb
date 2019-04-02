# List Users Logged In
```sql
 SELECT concat(FirstName, ' ', LastName) AS 'Online Users' FROM useraccounts INNER JOIN griduser ON useraccounts.PrincipalID = griduser.UserID WHERE griduser.Online = 'True';
 ```
