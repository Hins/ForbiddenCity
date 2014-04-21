ForbiddenCity
=============

A classifier to tell you the user type in douban.com

It will spider some user data in www.douban.com, then extract 60+ features, and leverage SVM in Matlab to train a classifier, meanwhile You can generate test data by TestDataGenerator.php file.

Usage:
1. Prepare a candidate as user.
2. Crawl some user data by the seed. (UserList.php)
3. Generate features against user data. (TrainDataGenerator.php)
4. Label training data by human-rsource or AutoLabel.php(rule-based).
5. Train SVM model by Matlab.
6. Generate test data.   (TestDataGenerator.php)
7. Verify the model by test data.


Author: Hins Pan
Date: 2014.4.21
