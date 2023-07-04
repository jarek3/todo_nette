FROM ubuntu:latest
LABEL authors="Jarek"

ENTRYPOINT ["top", "-b"]