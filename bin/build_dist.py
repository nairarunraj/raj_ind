#!/usr/bin/env python3

"""
Reads the src directory and builds a distribution package for the project in dist directory.

Skipping any files that are not needed for the distribution package like (.git folders)
"""

import logging
import os
import shutil

logging.basicConfig(level=logging.INFO)
logger = logging.getLogger(__name__)

def build_distribution():
    # Remove the existing dist directory
    if os.path.exists("dist"):
        shutil.rmtree("dist")

    # Create the dist directory
    os.makedirs("dist")

    # Copy all files from src to dist
    for root, dirs, files in os.walk("src"):
        # Skip .git directories
        dirs[:] = [d for d in dirs if d != ".git"]
        for filename in files:
            src_path = os.path.join(root, filename)
            dst_path = os.path.join("dist", os.path.relpath(src_path, "src"))
            os.makedirs(os.path.dirname(dst_path), exist_ok=True)
            shutil.copy2(src_path, dst_path)

    logger.info("Distribution package built successfully in the 'dist' directory.")

if __name__ == "__main__":
    build_distribution()