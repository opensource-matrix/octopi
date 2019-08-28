@echo off

cmd /c node 1up.js
cmd /c npm publish
git add *
git commit -m "%*"
git push