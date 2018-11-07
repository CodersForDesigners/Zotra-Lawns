
#! /bin/bash

while getopts "p:" opt; do
	case ${opt} in
		p )
			PROJECT_DIR=${OPTARG}
			;;
	esac
done

# Establish symbolic links to the `media` and `data` directories
rm media
ln -s ../media/${PROJECT_DIR} media
rm data
ln -s ../data/${PROJECT_DIR} data
