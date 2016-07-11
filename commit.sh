read -p "Commit name: " commit

rm -rf .DS_Store

git add .
git commit -m "$commit"
git push -u origin master
