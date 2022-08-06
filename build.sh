#!/bin/bash

SCRIPT_DIR=$(cd "$(dirname "${BASH_SOURCE[0]}")" &> /dev/null && pwd)
VERSION=`cat $SCRIPT_DIR/filename-randomizer.php | grep 'Version:' | sed 's/.* //g' | tr -d '\n'`

echo "Building v$VERSION release"

pushd $SCRIPT_DIR
rm filename-randomizer-v$VERSION.zip
mkdir filename-randomizer
cp `git ls-files` ./filename-randomizer
zip -r filename-randomizer-v$VERSION.zip ./filename-randomizer
rm -rf filename-randomizer
popd
